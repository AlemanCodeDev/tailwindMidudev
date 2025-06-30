<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor SVG a PNG/JPG - Descarga Directa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #1a2a6c);
            color: #fff;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            margin-bottom: 30px;
            padding: 30px;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            background: linear-gradient(45deg, #00bfff, #00ffcc);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-top: 10px;
        }
        
        .panel {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .panel h2 {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .svg-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed rgba(255, 255, 255, 0.2);
            min-height: 200px;
        }
        
        .controls {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .format-selector {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .format-btn {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid transparent;
            font-size: 1.1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
        }
        
        .format-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        .format-btn.active {
            background: rgba(0, 123, 255, 0.7);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .btn {
            padding: 17px;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .convert-btn {
            background: linear-gradient(45deg, #007bff, #00bfff);
            margin-top: 10px;
        }
        
        .convert-btn:hover {
            background: linear-gradient(45deg, #0069d9, #0099ff);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .convert-btn:active {
            transform: translateY(0);
        }
        
        .quality-container {
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
        
        .quality-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 1.1rem;
            align-items: center;
        }
        
        .quality-label span:first-child {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        input[type="range"] {
            width: 100%;
            height: 12px;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            outline: none;
            -webkit-appearance: none;
        }
        
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #00bfff;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 191, 255, 0.7);
        }
        
        .status {
            text-align: center;
            padding: 20px;
            margin-top: 25px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            display: none;
        }
        
        .status.success {
            background: rgba(40, 167, 69, 0.3);
            display: block;
        }
        
        .status.error {
            background: rgba(220, 53, 69, 0.3);
            display: block;
        }
        
        .icon-large {
            font-size: 1.8rem;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 25px 0;
        }
        
        .feature {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        
        @media (max-width: 600px) {
            .format-selector {
                flex-direction: column;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .panel {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-file-download"></i> Convertidor SVG a PNG/JPG</h1>
            <p class="subtitle">Descarga directa sin previsualización en el navegador</p>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-bolt icon-large"></i>
                    <h3>Conversión Rápida</h3>
                </div>
                <div class="feature">
                    <i class="fas fa-cloud-download-alt icon-large"></i>
                    <h3>Descarga Directa</h3>
                </div>
                <div class="feature">
                    <i class="fas fa-sliders-h icon-large"></i>
                    <h3>Control de Calidad</h3>
                </div>
            </div>
        </header>
        
        <div class="panel">
            <h2><i class="fas fa-cog"></i> Configuración de Conversión</h2>
            <div class="svg-container">
                <!-- SVG se insertará aquí -->
            </div>
            
            <div class="controls">
                <div class="format-selector">
                    <button class="format-btn active" data-format="png">
                        <i class="fas fa-file-image"></i>
                        Formato PNG
                    </button>
                    <button class="format-btn" data-format="jpg">
                        <i class="fas fa-file-image"></i>
                        Formato JPG
                    </button>
                </div>
                
                <div class="quality-container" id="qualityContainer" style="display: none;">
                    <div class="quality-label">
                        <span>
                            <i class="fas fa-tachometer-alt"></i>
                            Calidad de imagen:
                        </span>
                        <span id="qualityValue">90%</span>
                    </div>
                    <input type="range" id="qualitySlider" min="10" max="100" value="90">
                </div>
                
                <button id="convertBtn" class="btn convert-btn">
                    <i class="fas fa-download"></i> Descargar Imagen
                </button>
                
                <div class="status" id="status">
                    <i class="fas fa-check-circle"></i> Imagen descargada con éxito
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Conversor SVG a PNG/JPG con JavaScript - Descarga directa sin previsualización</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Insertar SVG en el contenedor
            const svgContainer = document.querySelector('.svg-container');
            const svgString = `<svg height="81.00077147652894" width="370.00000000000006">
                <defs id="SvgjsDefs1001">
                    </defs>
                    <g id="SvgjsG1007" featurekey="HKaMnE-0" transform="matrix(0.7778382301330566,0,0,0.7778382301330566,1.7498916647725924,6.714889626294227)" fill="#eeeeee">
                        <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M50.459,95.503c-2.519,0-4.975-0.259-7.383-0.655l2.064-5.143  
                        c1.744,0.236,3.511,0.399,5.319,0.399c2.501,0,4.94-0.261,7.313-0.703l-5.998-6.497h-8.514h-1.8h-1.8v-5.398h-5.899  
                        c-0.623,1.07-1.771,1.8-3.099,1.8c-1.988,0-3.601-1.612-3.601-3.601s1.612-3.6,3.601-3.6c1.329,0,2.477,0.728,3.099,1.8h5.899v-1.8  
                        v-3.601h3.6H61.26v0.77l4.416,4.784c0.315-0.09,0.641-0.153,0.983-0.153c1.988,0,3.6,1.612,3.6,3.601c0,1.987-1.611,3.598-3.6,3.598  
                        s-3.599-1.61-3.599-3.598c0-0.296,0.044-0.579,0.11-0.854l-4.197-4.547H43.261v7.2H54.06v0.768l7.725,8.366  
                        c6.576-1.96,12.414-5.601,17.071-10.395l-5.483-5.939H72.06V55.081l-5.435-5.883c-1.503,1.309-3.101,2.702-4.651,4.053  
                        c-0.299,0.263-0.893,0.779-0.893,0.779l-1.621,0.024v0.051h-7.699c-0.623,1.072-1.771,1.801-3.1,1.801c-1.988,0-3.6-1.612-3.6-3.601 
                        s1.612-3.599,3.6-3.599c1.329,0,2.477,0.728,3.1,1.8h7.699v0.393l10.799-9.623V27.107h-7.198v7.7  
                        c1.07,0.623,1.798,1.771,1.798,3.099c0,1.988-1.61,3.601-3.599,3.601c-1.987,0-3.6-1.612-3.6-3.601c0-1.329,0.728-2.477,1.8-3.099  
                        v-7.7v-1.8v-1.8h10.799v-7.183c-1.426-0.825-2.89-1.593-4.421-2.238c-0.573,0.264-1.206,0.422-1.879,0.422  
                        c-2.484,0-4.499-2.015-4.499-4.5c0-2.484,2.015-4.499,4.499-4.499c2.243,0,4.087,1.644,4.428,3.788  
                        c15.918,6.93,27.07,22.741,27.07,41.209C95.457,75.357,75.312,95.503,50.459,95.503z M81.058,52.306  
                        c-1.988,0-3.599-1.61-3.599-3.599c0-1.329,0.729-2.477,1.799-3.101V30.708h1.8h1.801h1.87c-2.753-4.731-6.471-8.829-10.869-12.054  
                        v26.453h-2.542c-0.584,0.508-1.25,1.09-1.978,1.723l6.525,7.069l-0.271,0.207h0.064v5.4h2.3c0.622-1.072,1.77-1.8,3.099-1.8  
                        c1.988,0,3.601,1.612,3.601,3.601c0,1.987-1.612,3.6-3.601,3.6c-1.329,0-2.477-0.729-3.099-1.8h-2.3v6.168l5.598,6.063  
                        c5.489-6.791,8.802-15.415,8.802-24.831c0-5.783-1.266-11.257-3.498-16.199h-3.702v11.298c1.072,0.625,1.8,1.772,1.8,3.101  
                        C84.658,50.695,83.046,52.306,81.058,52.306z M50.459,10.908c-1.214,0-2.412,0.076-3.598,0.183v11.386l4.416,4.784  
                        c0.314-0.09,0.64-0.153,0.982-0.153c1.988,0,3.601,1.612,3.601,3.601c0,1.988-1.612,3.6-3.601,3.6s-3.599-1.612-3.599-3.6  
                        c0-0.295,0.044-0.579,0.111-0.853l-2.535-2.748h-1.918l-6.35,5.536l4.86,5.263h0.431v0.468l0.018,0.02l-0.018,0.016v22.897H61.76 
                        c0.622-1.073,1.77-1.801,3.099-1.801c1.988,0,3.601,1.612,3.601,3.601s-1.612,3.599-3.601,3.599c-1.329,0-2.477-0.729-3.099-1.799  
                        H43.261h-1.8h-1.8V39.782L23.152,21.899c-1,0.953-1.942,1.963-2.839,3.015L35.63,41.507h0.431v0.467l0.018,0.02l-0.018,0.016v21.097  
                        v3.599h-3.599h-9h-1.798h-1.8v-8.999h-8.327c2.744,14.895,13.823,26.857,28.229,30.896l-2.025,5.049  
                        C19.088,88.158,5.464,70.936,5.464,50.507c0-24.852,20.146-44.997,44.996-44.997c2.447,0,4.831,0.248,7.172,0.624l-2.062,5.142  
                        C53.893,11.06,52.196,10.908,50.459,10.908z M18.068,27.79c-4.534,6.425-7.206,14.251-7.206,22.717c0,1.214,0.063,2.412,0.171,3.599  
                        h12.428v1.801v1.8v5.4h9V43.382l-5.627-6.095l-5.231,7.245c0.031,0.188,0.06,0.378,0.06,0.575c0,1.988-1.612,3.6-3.6,3.6  
                        s-3.6-1.612-3.6-3.6s1.612-3.6,3.6-3.6c0.401,0,0.779,0.081,1.139,0.202l5.142-7.12L18.068,27.79z M43.261,11.594  
                        c-6.497,1.195-12.418,3.998-17.389,7.942l9.656,10.461l7.733-6.742V11.594z">
                        </path></g>
                        </svg>`;
            svgContainer.innerHTML = svgString;
            
            // Elementos DOM
            const convertBtn = document.getElementById('convertBtn');
            const formatBtns = document.querySelectorAll('.format-btn');
            const qualitySlider = document.getElementById('qualitySlider');
            const qualityValue = document.getElementById('qualityValue');
            const qualityContainer = document.getElementById('qualityContainer');
            const status = document.getElementById('status');
            
            let currentFormat = 'png';
            let quality = 0.9;
            
            // Cambiar formato
            formatBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    formatBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    currentFormat = btn.dataset.format;
                    
                    // Mostrar/ocultar control de calidad
                    if (currentFormat === 'jpg') {
                        qualityContainer.style.display = 'block';
                    } else {
                        qualityContainer.style.display = 'none';
                    }
                });
            });
            
            // Control de calidad para JPG
            qualitySlider.addEventListener('input', () => {
                quality = qualitySlider.value / 100;
                qualityValue.textContent = `${qualitySlider.value}%`;
            });
            
            // Función para convertir SVG a imagen y descargar
            async function convertAndDownload() {
                convertBtn.innerHTML = `<i class="fas fa-spinner fa-spin"></i> Procesando...`;
                convertBtn.disabled = true;
                status.className = 'status';
                
                try {
                    // Crear blob a partir del SVG
                    const svgBlob = new Blob([svgString], { type: 'image/svg+xml' });
                    const url = URL.createObjectURL(svgBlob);
                    
                    // Crear imagen
                    const img = new Image();
                    
                    await new Promise((resolve, reject) => {
                        img.onload = resolve;
                        img.onerror = reject;
                        img.src = url;
                    });
                    
                    // Crear canvas
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    
                    // Establecer tamaño del canvas
                    canvas.width = img.width;
                    canvas.height = img.height;
                    
                    // Limpiar canvas y dibujar SVG
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    ctx.drawImage(img, 0, 0);
                    
                    // Convertir a formato deseado
                    let dataUrl;
                    if (currentFormat === 'png') {
                        dataUrl = canvas.toDataURL('image/png');
                    } else {
                        dataUrl = canvas.toDataURL('image/jpeg', quality);
                    }
                    
                    // Crear enlace de descarga
                    const a = document.createElement('a');
                    a.download = `imagen.${currentFormat}`;
                    a.href = dataUrl;
                    
                    // Simular clic para descargar
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    
                    // Mostrar mensaje de éxito
                    status.className = 'status success';
                    status.innerHTML = `<i class="fas fa-check-circle"></i> Imagen descargada con éxito!`;
                    
                    // Liberar memoria
                    URL.revokeObjectURL(url);
                } catch (error) {
                    console.error('Error al convertir:', error);
                    status.className = 'status error';
                    status.innerHTML = `<i class="fas fa-exclamation-circle"></i> Error al convertir: ${error.message}`;
                } finally {
                    convertBtn.innerHTML = `<i class="fas fa-download"></i> Descargar Imagen`;
                    convertBtn.disabled = false;
                    
                    // Ocultar mensaje después de 5 segundos
                    setTimeout(() => {
                        status.className = 'status';
                    }, 5000);
                }
            }
            
            // Evento de conversión y descarga
            convertBtn.addEventListener('click', convertAndDownload);
        });
    </script>
</body>
</html>