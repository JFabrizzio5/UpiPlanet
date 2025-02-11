import sys
import os
import fitz  # PyMuPDF
from PIL import Image, ImageDraw

def procesar_pdf(texto_busqueda, base_pdf_dir, output_capturas_dir):
    # Configurar paths
    pdf_path = os.path.join(base_pdf_dir, 'asignacion-salones-25-2.pdf')
    capturas_subdir = os.path.join(output_capturas_dir, texto_busqueda)
    output_pdf_path = os.path.join(base_pdf_dir, f"{texto_busqueda}.pdf")

    # Verificar existencia del PDF original
    if not os.path.exists(pdf_path):
        raise FileNotFoundError(f"Archivo PDF no encontrado: {pdf_path}")

    # Crear directorios necesarios
    os.makedirs(capturas_subdir, exist_ok=True)

    doc = fitz.open(pdf_path)
    paginas_a_capturar = []

    for pagina_num in range(len(doc)):
        pagina = doc.load_page(pagina_num)
        texto_rects = pagina.search_for(texto_busqueda)

        if texto_rects:
            factor_escala = 2.0
            for idx, rect in enumerate(texto_rects):
                # Ajustar coordenadas con margen
                y0 = max(0, rect.y0 - 10)
                y1 = min(pagina.rect.height, rect.y1 + 10)

                # Capturar toda el ancho de la página
                x0 = 0
                x1 = pagina.rect.width

                # Generar imagen
                pix = pagina.get_pixmap(
                    matrix=fitz.Matrix(factor_escala, factor_escala),
                    clip=fitz.Rect(x0, y0, x1, y1)
                )

                img = Image.frombytes("RGB", [pix.width, pix.height], pix.samples)
                draw = ImageDraw.Draw(img)

                # Dibujar rectángulos
                for r in texto_rects:
                    rel_x0 = (r.x0 - x0) * factor_escala
                    rel_y0 = (r.y0 - y0) * factor_escala
                    rel_x1 = (r.x1 - x0) * factor_escala
                    rel_y1 = (r.y1 - y0) * factor_escala

                    if rel_x1 > rel_x0 and rel_y1 > rel_y0:
                        draw.rectangle(
                            [rel_x0, rel_y0, rel_x1, rel_y1],
                            outline="yellow",
                            width=3
                        )

                # Guardar imagen
                img_filename = f"{texto_busqueda}_{pagina_num + 1}_{idx + 1}_recorte.png"
                img_path = os.path.join(capturas_subdir, img_filename)
                img.save(img_path)
                paginas_a_capturar.append(img_path)

    # Generar PDF solo si hay capturas
    if paginas_a_capturar:
        images = [Image.open(png) for png in paginas_a_capturar]
        images[0].save(
            output_pdf_path,
            save_all=True,
            append_images=images[1:],
            resolution=300.0,
            quality=95
        )

    return {
        'pdf_path': output_pdf_path,
        'capturas': paginas_a_capturar
    }

if __name__ == '__main__':
    # Uso: python script.py <texto_busqueda> <pdf_dir> <capturas_dir>
    if len(sys.argv) != 4:
        print("Uso: python script.py <texto_busqueda> <pdf_dir> <capturas_dir>")
        sys.exit(1)

    texto = sys.argv[1]
    pdf_dir = sys.argv[2]
    capturas_dir = sys.argv[3]

    try:
        resultado = procesar_pdf(texto, pdf_dir, capturas_dir)
        print(f"Procesamiento exitoso|{resultado['pdf_path']}|{','.join(resultado['capturas'])}")
    except Exception as e:
        print(f"Error|{str(e)}")
        sys.exit(1)
