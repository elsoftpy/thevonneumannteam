<!-- Crosswords -->
        <div class="footer">
            <div class="container">
                <div class="row" id="crosswords-board">
                        <div class="crossword"></div>
                        <div class="crossword-clues"></div>
                <div class="loader">
                    <div class="loader-message">Loading...</div>
                </div>

                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of crosswords -->
        @push('scripts')
            <script>
                
                Crossword.init(
                    {
                        "sizeX": 19,
                        "sizeY": 19,
                        "across": [
                            {
                                "number": 2,
                                "x": 9,
                                "y": 6,
                                "desc": "Universidad de la Integración de las Américas",
                                "length": 5
                            },
                            {
                                "number": 4,
                                "x": 1,
                                "y": 8,
                                "desc": "Placa Madre",
                                "length": 11
                            },
                            {
                                "number": 5,
                                "x": 8,
                                "y": 10,
                                "desc": "Tratamiento automático de la información",
                                "length": 11
                            },
                            {
                                "number": 8,
                                "x": 13,
                                "y": 12,
                                "desc": "Memoria de acceso aleatorio",
                                "length": 3
                            },
                            {
                                "number": 9,
                                "x": 4,
                                "y": 14,
                                "desc": "Alan (no es el profe)",
                                "length": 6
                            },
                            
                        ],
                        "down": [
                            {
                                "number": 1,
                                "x": 9,
                                "y": 1,
                                "desc": "Padre de la arquitectura del computador",
                                "length": 10
                            },
                            {
                                "number": 3,
                                "x": 15,
                                "y": 7,
                                "desc": "Conjunto de partes que funcionan coordinadamente para lograr un objetivo",
                                "length": 7
                            },
                            {
                                "number": 5,
                                "x": 8,
                                "y": 10,
                                "desc": "Palabra derivada del latín \"ingenium\", significa producir",
                                "length": 10
                            },
                            {
                                "number": 6,
                                "x": 17,
                                "y": 10,
                                "desc": "Unidad central de procesamiento",
                                "length": 3
                            },
                            {
                                "number": 7,
                                "x": 5,
                                "y": 12,
                                "desc": "Tiene como función principal el procesamiento de los cálculos para la salida de imagen",
                                "length": 3
                            },
                        ]

                    }
                );


            </script>
        @endpush