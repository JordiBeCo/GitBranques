 
    function myFunction(){
                        
                            //CREEM EL DIV CAIXA I L'AFEGIM DINS DEL BODY
                            var div_principal = document.getElementById("divPrincipal");
                            div_principal.innerHTML="";
                            
                            var div_caixa = document.createElement("div");
                            div_caixa.setAttribute("id","caixa");
                            div_principal.appendChild(div_caixa);
                                //CREEM EL DIV HEADER I L'AFEGIM DINS DEL DIV CAIXA
                                var div_header = document.createElement("div");
                                div_header.setAttribute("id","header");
                                div_caixa.appendChild(div_header);
                                    //CREEM EL H2 CAIXA I L'AFEGIM DINS DEL DIV HEADER
                                    var h2 = document.createElement("h2");
                                    div_header.appendChild(h2);
                                        //CREEM EL TEXT I L'AFEGIM DINS DEL H2
                                        var text_h2 = document.createTextNode("Hola masters!");
                                        h2.appendChild(text_h2);
                                
                                
                                //CREEM EL DIV BODY I L'AFEGIM DINS DEL DIV CAIXA
                                var div_body = document.createElement("div");
                                div_body.setAttribute("id","body");
                                div_caixa.appendChild(div_body);
                                    //CREEM EL DIV_TEXT I L'AFEGIM DINS DEL DIV_BODY
                                    var div_text = document.createElement("div");
                                    div_text.setAttribute("id","text");
                                    div_body.appendChild(div_text);
                                        //CREEM EL TEXT I L'AFEGIM DINS DEL DIV_TEXT
                                        var paragraf_1 = document.createTextNode("Missatge pels de 2n DAW");
                                        div_text.appendChild(paragraf_1);
                                                    
                                    //CREEM EL DIV MESTEXT I L'AFEGIM DINS DE DIV_BODY
                                    var div_mestext = document.createElement("div");
                                    div_mestext.setAttribute("id","anothertext");
                                    div_caixa.appendChild(div_mestext);
                                        //CREEM EL PARAGRAF P1 I LL'AFEGIM DINS DEL DIV_MESTETX
                                        var p1 = document.createElement("p");
                                        div_mestext.appendChild(p1);
                                            //CREEM UN TEXT I L'AFEGIM DINS DE P1
                                            var text_p1 = document.createTextNode("Avui serà un dia meravellós...");
                                            p1.appendChild(text_p1);
                                        
                                        //CREEM EL PARAGRAF P2 I LL'AFEGIM DINS DEL DIV_MESTETX
                                        var p2 = document.createElement("p");
                                        div_mestext.appendChild(p2);
                                            //CREEM UN TEXT I L'AFEGIM DINS DE P2
                                            var text_p2 = document.createTextNode("si ens ho proposem :)");
                                            p2.appendChild(text_p2);
                        
                            
                                //CREEM EL DIV FOOTER I L'AFEGIM DINS DEL DIV_CAIXA
                                var div_footer = document.createElement("div");
                                div_footer.setAttribute("id","footer");
                                div_caixa.appendChild(div_footer);
                                    //CREEM UN PARAGRAF I L'AFEGIM DINS DEL FOOTER
                                    var p3 = document.createElement("p");
                                    div_footer.appendChild(p3);
                                        //CREEM EL TEXT I L'AFEGIM DINS DE P3
                                        var text_p3 = document.createTextNode("copyright ");
                                        p3.appendChild(text_p3);
                                        
                                        //CREEM LA NEGRETA I L'AFEGIM DINS DEL P3    
                                        var negreta = document.createElement("b");
                                        p3.appendChild(negreta);
                                            //CREEM TEXT I L'AFEGIM DINS DE NEGRETA;
                                            var text_negrata = document.createTextNode("2017");
                                            negreta.appendChild(text_negrata);
                                    
                }

    function createElements(){
        var div_principal = document.getElementById("divPrincipal");
        div_principal.innerHTML="";
        
        var Elements = ["div","h2","p","a","h1"];
        
        for(var i = 0; i<Elements.length; i++){
            
            
                    var tipus = document.createElement(Elements[i]);
                    div_principal.appendChild(tipus);
                        
                        var text = document.createTextNode("Lorem ipsum Prova 1,2,3,4");
                        tipus.appendChild(text);
        
        }
    }
