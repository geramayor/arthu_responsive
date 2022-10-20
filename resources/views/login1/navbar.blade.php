<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

<style type="text/css">
    ul{
        list-style-type: none;
    }
    .lis{
        float: left;
        margin-right: 10px;
        padding: 0 4px;
        font-size:18px;
        color:  white;
    }
    .breadcrumbs{
        width:80%;
    }

    .navbar{
        height:100px;
    }

    h1{
        color: #32a852;
    }

    .modo{
        float:right;
    }

    .cambiar {
        cursor: pointer;
        border: 2px solid rgb(224, 209, 209);
        text-align: center;
        padding: 5px;
        margin-left: 8px;
    }

    .oscuro{
        background-color: #222!important;
        color: #e6e6e6;
    }


</style>


<script>
            $( ".cambiar" ).on("click", function() {
                if( $( "body" ).hasClass( "oscuro" )) {
                    $( "body" ).removeClass( "oscuro" );
                    $( ".cambiar" ).text( "Apagado" );
                    var elem = document.getElementById('navb');
                    elem.style.backgroundColor="#151C2E";
                    localStorage.setItem('dark-mode','false');
                    var tex = document.getElementById('1').style.color = '#fff';
                    tex = document.getElementById('2').style.color = '#fff';
                    tex = document.getElementById('3').style.color = '#fff';
                    tex = document.getElementById('4').style.color = '#fff';
                    tex = document.getElementById('5').style.color = '#fff';
                    tex = document.getElementById('6').style.color = '#fff';
                    tex = document.getElementById('7').style.color = '#fff';
                } else {$( "body" ).addClass( "oscuro" );
                    $( ".cambiar" ).text( "Encendido" );
                    var elem = document.getElementById('navb');
                    elem.style.backgroundColor="#fff";
                    //var tex = document.getElementById('navt');
                    var tex = document.getElementById('1').style.color = '#000000';
                    tex = document.getElementById('2').style.color = '#000000';
                    tex = document.getElementById('3').style.color = '#000000';
                    tex = document.getElementById('4').style.color = '#000000';
                    tex = document.getElementById('5').style.color = '#000000';
                    tex = document.getElementById('6').style.color = '#000000';
                    tex = document.getElementById('7').style.color = '#000000';

                // tex.style.backgroundColor="#0000";
                // var elem2 = document.getElementsByClassName('texto');
                    //elem2.style.color="#222";
                    localStorage.setItem('dark-mode','true');
                }
            });

             if(localStorage.getItem('dark-mode')=== 'true'){//modo oscuro
                document.body.classList.add('oscuro');
                document.getElementById('navb').style.backgroundColor = '#fff';
                document.getElementById('1').style.color = '#000000';
                document.getElementById('2').style.color = '#000000';
                document.getElementById('3').style.color = '#000000';
                document.getElementById('4').style.color = '#000000';
                document.getElementById('5').style.color = '#000000';
                document.getElementById('6').style.color = '#000000';
                document.getElementById('7').style.color = '#000000';
             } else{
                document.body.classList.remove('oscuro');
             }
</script> -->
