/*const productosData = [
    // --- COMPONENTES PASIVOS ---
    { id: 1, nombre: "Resistencias 1/4W surtidas (100 pzs)", descripcion: "Surtido de 100 resistencias de 1/4W, varios valores.", precio: 20.00, imagenUrl: "Resistencias 1-4 W.jpg", categoria: "Componentes Pasivos" },
    { id: 2, nombre: "Capacitores cerámicos surtidos", descripcion: "Surtido de capacitores cerámicos de diversos valores.", precio: 30, imagenUrl: "Capacitores cerámicos.jpg", categoria: "Componentes Pasivos" },
    { id: 3, nombre: "Capacitores electrolíticos surtidos", descripcion: "Surtido de capacitores electrolíticos de diversos valores.", precio: 40, imagenUrl: "Capacitores electrolíticos.jpeg", categoria: "Componentes Pasivos" },
    { id: 4, nombre: "Potenciómetro 10k", descripcion: "Potenciómetro (resistencia variable) de 10k Ohms.", precio: 10, imagenUrl: "Potenciometro10.jpg", categoria: "Componentes Pasivos" },
    { id: 5, nombre: "Potenciómetro 100k", descripcion: "Potenciómetro (resistencia variable) de 100k Ohms.", precio: 10, imagenUrl: "Potenciometro100.jpg", categoria: "Componentes Pasivos" },
    { id: 36, nombre: "Fotoresistencia LDR", descripcion: "Resistencia dependiente de la luz (LDR).", precio: 2, imagenUrl: "Fotoresistencia.jpg", categoria: "Componentes Pasivos" },

    // --- SEMICONDUCTORES Y ACTIVOS ---
    { id: 10, nombre: "LEDs 3mm (unidad)", descripcion: "Diodo emisor de luz (LED) de 3mm.", precio: 2, imagenUrl: "Led3mm.jpg", categoria: "Semiconductores" },
    { id: 11, nombre: "LEDs 5mm (unidad)", descripcion: "Diodo emisor de luz (LED) de 5mm.", precio: 2, imagenUrl: "Led5mm.jpg", categoria: "Semiconductores" },
    { id: 12, nombre: "Leds surtidos (50 pzs)", descripcion: "Paquete surtido de 50 LEDs de diferentes colores y tamaños.", precio: 30, imagenUrl: "Ledsurtidos.jpg", categoria: "Semiconductores" },
    { id: 13, nombre: "Diodo 1N4007", descripcion: "Diodo rectificador estándar 1N4007.", precio: 1, imagenUrl: "Diodo.jpeg", categoria: "Semiconductores" },
    { id: 14, nombre: "Diodo Zener surtido", descripcion: "Surtido de diodos Zener para regulación de voltaje.", precio: 2, imagenUrl: "Diodozener.jpg", categoria: "Semiconductores" },
    { id: 15, nombre: "Transistor NPN 2N2222", descripcion: "Transistor de unión bipolar (BJT) NPN 2N2222.", precio: 3, imagenUrl: "Trans2n22.jpg", categoria: "Semiconductores" },
    { id: 16, nombre: "Transistor NPN BC547", descripcion: "Transistor de unión bipolar (BJT) NPN BC547.", precio: 2, imagenUrl: "BC547.jpg", categoria: "Semiconductores" },
    { id: 17, nombre: "Transistor PNP 2N2907", descripcion: "Transistor de unión bipolar (BJT) PNP 2N2907.", precio: 3, imagenUrl: "2N2907.jpg", categoria: "Semiconductores" },
    { id: 18, nombre: "Mosfet IRF540", descripcion: "Transistor MOSFET de potencia IRF540.", precio: 18, imagenUrl: "IRF540.jpg", categoria: "Semiconductores" },
    { id: 19, nombre: "Mosfet IRFZ44N", descripcion: "Transistor MOSFET de potencia IRFZ44N.", precio: 20, imagenUrl: "IRFZ44N.jpg", categoria: "Semiconductores" },
    { id: 20, nombre: "Puente rectificador KBPC", descripcion: "Puente rectificador de la serie KBPC.", precio: 10, imagenUrl: "KBPC.jpg", categoria: "Semiconductores" },

    // --- MOTORES Y ACTUADORES ---
    { id: 21, nombre: "Relevador 5V", descripcion: "Relé electromecánico de 5 voltios.", precio: 15, imagenUrl: "Rele5.jpg", categoria: "Actuadores y Motores" },
    { id: 22, nombre: "Relevador 12V", descripcion: "Relé electromecánico de 12 voltios.", precio: 15, imagenUrl: "Rele12V.jpeg", categoria: "Actuadores y Motores" },
    { id: 23, nombre: "Buzzer activo", descripcion: "Zumbador (buzzer) con oscilador interno (activo).", precio: 10, imagenUrl: "buzzera.jpeg", categoria: "Actuadores y Motores" },
    { id: 24, nombre: "Buzzer pasivo", descripcion: "Zumbador (buzzer) sin oscilador interno (pasivo).", precio: 10, imagenUrl: "buzzerp.jpg", categoria: "Actuadores y Motores" },
    { id: 25, nombre: "Motor DC pequeño", descripcion: "Motor de corriente continua pequeño.", precio: 15, imagenUrl: "motorc.jpg", categoria: "Actuadores y Motores" },
    { id: 26, nombre: "Servomotor SG90", descripcion: "Servomotor pequeño, modelo SG90.", precio: 60, imagenUrl: "servosg90.jpg", categoria: "Actuadores y Motores" },
    { id: 27, nombre: "Servomotor MG996R", descripcion: "Servomotor de alto torque, modelo MG996R.", precio: 130, imagenUrl: "servomg99.jpg", categoria: "Actuadores y Motores" },
    { id: 28, nombre: "Motor paso a paso 28BYJ-48", descripcion: "Motor paso a paso 28BYJ-48.", precio: 60, imagenUrl: "motor28.jpeg", categoria: "Actuadores y Motores" },
    
    // --- DRIVERS Y CONTROLADORES DE MOTOR ---
    { id: 29, nombre: "Driver ULN2003", descripcion: "Driver para motores paso a paso o relés, basado en el ULN2003.", precio: 15, imagenUrl: "uln2003.jpg", categoria: "Drivers de Motor" },
    { id: 30, nombre: "Driver L298N", descripcion: "Módulo controlador de motor L298N (puente H).", precio: 80, imagenUrl: "l298n.jpg", categoria: "Drivers de Motor" },

    // --- SENSORES Y MÓDULOS DE DETECCIÓN ---
    { id: 31, nombre: "Sensor ultrasónico HC-SR04", descripcion: "Sensor de distancia ultrasónico HC-SR04.", precio: 30, imagenUrl: "hc-sr04.jpeg", categoria: "Sensores" },
    { id: 32, nombre: "Sensor de temperatura LM35", descripcion: "Sensor de temperatura de precisión LM35 (salida analógica).", precio: 20, imagenUrl: "lm35.jpg", categoria: "Sensores" },
    { id: 33, nombre: "Sensor de humedad/temperatura DHT11", descripcion: "Módulo sensor de humedad y temperatura DHT11.", precio: 40, imagenUrl: "dht11.jpg", categoria: "Sensores" },
    { id: 34, nombre: "Sensor DHT22", descripcion: "Módulo sensor de humedad y temperatura de alta precisión DHT22.", precio: 120, imagenUrl: "dht22.jpeg", categoria: "Sensores" },
    { id: 35, nombre: "Sensor infrarrojo TCRT5000", descripcion: "Módulo sensor infrarrojo reflectivo TCRT5000 (seguidor de línea).", precio: 10, imagenUrl: "tcrt5000.jpg", categoria: "Sensores" },

    // --- COMUNICACIÓN Y CONECTIVIDAD ---
    { id: 37, nombre: "Modulo Bluetooth HC-05", descripcion: "Módulo transceptor Bluetooth serial HC-05.", precio: 80, imagenUrl: "hc-05.jpg", categoria: "Comunicación Inalámbrica" },
    { id: 38, nombre: "Modulo WiFi ESP8266", descripcion: "Módulo WiFi microcontrolador ESP8266 (ej. ESP-01 o similar).", precio: 70, imagenUrl: "esp8266.jpg", categoria: "Comunicación Inalámbrica" },

    // --- PLATAFORMAS DE DESARROLLO (Microcontroladores) ---
    { id: 39, nombre: "ESP32", descripcion: "Placa microcontroladora con WiFi y Bluetooth ESP32.", precio: 140, imagenUrl: "esp32.jpg", categoria: "Plataformas de Desarrollo" },
    { id: 40, nombre: "Arduino UNO (original)", descripcion: "Placa de desarrollo Arduino UNO R3 original.", precio: 680, imagenUrl: "arduino 1.1.jpg", categoria: "Plataformas de Desarrollo" },
    { id: 41, nombre: "Arduino UNO (generico)", descripcion: "Placa de desarrollo Arduino UNO R3 genérica.", precio: 130, imagenUrl: "arduino1.2.jpg", categoria: "Plataformas de Desarrollo" },
    { id: 42, nombre: "Arduino Nano (generico)", descripcion: "Placa de desarrollo Arduino Nano genérica.", precio: 80, imagenUrl: "arduinonano.jpg", categoria: "Plataformas de Desarrollo" },
    { id: 43, nombre: "Raspberry Pi 4 (2GB)", descripcion: "Mini-computadora Raspberry Pi 4, modelo de 2GB de RAM.", precio: 1500, imagenUrl: "raspberry4.jpg", categoria: "Plataformas de Desarrollo" },
    { id: 44, nombre: "Raspberry Pi 4 (4GB)", descripcion: "Mini-computadora Raspberry Pi 4, modelo de 4GB de RAM.", precio: 1500, imagenUrl: "raspberry2.jpg", categoria: "Plataformas de Desarrollo" },

    // --- ENERGÍA Y REGULACIÓN ---
    { id: 45, nombre: "Fuente de 5V 2A", descripcion: "Fuente de alimentación regulada de 5V y 2 Amperios.", precio: 50, imagenUrl: "5v.jpg", categoria: "Energía y Regulación" },
    { id: 46, nombre: "Fuente de 12V 5A", descripcion: "Fuente de alimentación regulada de 12V y 5 Amperios.", precio: 120, imagenUrl: "12v.jpg", categoria: "Energía y Regulación" },
    { id: 47, nombre: "Cargador tipo USB 5V", descripcion: "Cargador de pared USB de 5V (para alimentar placas).", precio: 40, imagenUrl: "cargador.jpg", categoria: "Energía y Regulación" },
    { id: 48, nombre: "Batería 9V genérica", descripcion: "Batería alcalina o de carbono-zinc de 9 voltios.", precio: 15, imagenUrl: "pila9v.jpg", categoria: "Energía y Regulación" },
    { id: 49, nombre: "Portapilas AA", descripcion: "Soporte (holder) para pilas de tamaño AA.", precio: 5, imagenUrl: "portapilasaa.jpg", categoria: "Energía y Regulación" },
    { id: 50, nombre: "Portapilas AAA", descripcion: "Soporte (holder) para pilas de tamaño AAA.", precio: 5, imagenUrl: "portapilasaaa.jpg", categoria: "Energía y Regulación" },
    { id: 51, nombre: "Portapilas 9V", descripcion: "Soporte (holder) para batería de 9V.", precio: 5, imagenUrl: "portapila9v.jpg", categoria: "Energía y Regulación" },
    { id: 52, nombre: "Convertidor buck LM2596", descripcion: "Módulo convertidor DC-DC reductor (buck) LM2596.", precio: 25, imagenUrl: "lm2596.jpg", categoria: "Energía y Regulación" },
    { id: 53, nombre: "Regulador 7805", descripcion: "Regulador de voltaje lineal 7805 (5V).", precio: 5, imagenUrl: "7805.jpeg", categoria: "Energía y Regulación" },
    { id: 54, nombre: "Regulador 7812", descripcion: "Regulador de voltaje lineal 7812 (12V).", precio: 5, imagenUrl: "7812.jpg", categoria: "Energía y Regulación" },

    // --- CONEXIÓN Y PROTOTIPADO ---
    { id: 6, nombre: "Protoboard 400 puntos", descripcion: "Placa de prototipado sin soldadura de 400 puntos.", precio: 45, imagenUrl: "proto400.jpg", categoria: "Conexión y Prototipado" },
    { id: 7, nombre: "Protoboard 830 puntos", descripcion: "Placa de prototipado sin soldadura de 830 puntos.", precio: 45, imagenUrl: "proto830.jpg", categoria: "Conexión y Prototipado" },
    { id: 8, nombre: "Jumpers macho–macho", descripcion: "Cables puente para protoboard, con terminales macho en ambos extremos.", precio: 20, imagenUrl: "M-M.jpg", categoria: "Conexión y Prototipado" },
    { id: 9, nombre: "Jumpers macho–hembra", descripcion: "Cables puente para protoboard, con terminales macho y hembra.", precio: 20, imagenUrl: "M-H.jpg", categoria: "Conexión y Prototipado" },
    { id: 55, nombre: "Cables Dupont", descripcion: "Cables Dupont para protoboard (surtido).", precio: 20, imagenUrl: "dupont.jpg", categoria: "Conexión y Prototipado" },
    { id: 56, nombre: "Cables USB–microUSB", descripcion: "Cables para conexión USB a microUSB.", precio: 30, imagenUrl: "usb-microusb.jpg", categoria: "Conexión y Prototipado" },
    { id: 57, nombre: "Cables USB-C", descripcion: "Cables para conexión USB tipo C.", precio: 30, imagenUrl: "usb-c.jpg", categoria: "Conexión y Prototipado" },

    // --- HERRAMIENTAS Y CONSUMIBLES ---
    { id: 58, nombre: "Estaño 60/40 (10–20g)", descripcion: "Rollo de soldadura de estaño 60/40 (10 a 20 gramos).", precio: 20, imagenUrl: "estaño.jpg", categoria: "Herramientas y Consumibles" },
    { id: 59, nombre: "Base para soldar", descripcion: "Base o soporte para cautín (soldador).", precio: 50, imagenUrl: "base.jpg", categoria: "Herramientas y Consumibles" },
    { id: 60, nombre: "Cautín 30W", descripcion: "Soldador de estaño (cautín) de 30 Watts.", precio: 120, imagenUrl: "cautin30.png", categoria: "Herramientas y Consumibles" },
    { id: 61, nombre: "Cautín 60W", descripcion: "Soldador de estaño (cautín) de 60 Watts.", precio: 120, imagenUrl: "cautin60.jpg", categoria: "Herramientas y Consumibles" },
    { id: 62, nombre: "Extractor de estaño", descripcion: "Bomba desoldadora para remover estaño.", precio: 20, imagenUrl: "extractor.jpg", categoria: "Herramientas y Consumibles" },
    { id: 63, nombre: "Multímetro económico", descripcion: "Multímetro digital básico (económico).", precio: 100, imagenUrl: "multimetro.jpg", categoria: "Herramientas y Consumibles" },
    { id: 64, nombre: "Multímetro profesional", descripcion: "Multímetro digital de alta precisión (profesional).", precio: 350, imagenUrl: "multimetro2.jpg", categoria: "Herramientas y Consumibles" },
    { id: 65, nombre: "Alcohol isopropílico 250 ml", descripcion: "Alcohol isopropílico para limpieza de componentes electrónicos.", precio: 40, imagenUrl: "Alcohol.jpg", categoria: "Herramientas y Consumibles" },
    { id: 66, nombre: "Pasta para soldar", descripcion: "Pasta (flux) para facilitar la soldadura.", precio: 20, imagenUrl: "PastaT.jpg", categoria: "Herramientas y Consumibles" },
    { id: 67, nombre: "Pasta térmica", descripcion: "Compuesto térmico para disipadores y semiconductores.", precio: 40, imagenUrl: "PastaS.jpg", categoria: "Herramientas y Consumibles" },
    { id: 68, nombre: "Ventilador 5V", descripcion: "Ventilador de refrigeración pequeño de 5 voltios.", precio: 20, imagenUrl: "ventilador5.jpg", categoria: "Herramientas y Consumibles" },
    { id: 69, nombre: "Ventilador 12V", descripcion: "Ventilador de refrigeración pequeño de 12 voltios.", precio: 20, imagenUrl: "ventilador12.jpg", categoria: "Herramientas y Consumibles" },
    { id: 70, nombre: "Disipador de aluminio pequeño", descripcion: "Disipador de calor de aluminio para componentes.", precio: 5, imagenUrl: "disipador.jpg", categoria: "Herramientas y Consumibles" }
];
function obtenerProductoPorId(id) {
    return productosData.find(p => Number(p.id) === Number(id));
}*/
let productosData = [];

fetch('/electroegam.com/public/products')
    .then(r => r.json())
    .then(data => productosData = data);