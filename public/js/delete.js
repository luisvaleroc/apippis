/ *
<a href="posts/2" data-method="delete"> <---- Queremos enviar una solicitud HTTP DELETE
- O solicite confirmación en el proceso -
<a href="posts/2" data-method="delete" data-confirm="¿Estás seguro ?">
* /

( función () {

  var laravel = {
    initialize :  function () {
      esta . methodLinks  =  $ ( ' a [método de datos] ' );

      esta . registerEvents ();
    },

    registerEvents :  function () {
      esta . Método Enlaces . on ( ' click ' , this . handleMethod );
    },

    handleMethod :  function ( e ) {
      enlace var =  $ ( esto );
      var httpMethod =  enlace . datos ( ' método ' ). toUpperCase ();
      forma var ;

      // Si el atributo del método de datos no es PUT o DELETE,
      // entonces no sabemos qué hacer. Solo ignoralo.
      if ( $ . inArray (httpMethod, [ ' PUT ' , ' DELETE ' ]) ===  -  1 ) {
        volver ;
      }

      // Permitir al usuario proporcionar opcionalmente data-confirm = "¿Está seguro?"
      if ( enlace . datos ( ' confirmar ' )) {
        if ( !  laravel . verificarConfirmar (enlace)) {
          devuelve  falso ;
        }
      }

      forma =  laravel . createForm (enlace);
      formar . enviar ();

      e . preventDefault ();
    },

    verificarConfirmar :  función ( enlace ) {
      volver  confirmar ( enlace . datos ( ' confirmar ' ));
    },

    createForm :  función ( enlace ) {
      forma var = 
      $ ( ' <form> ' , {
        ' method ' :  ' POST ' ,
        ' acción ' :  enlace . attr ( ' href ' )
      });

      token var = 
      $ ( ' <input> ' , {
        ' type ' :  ' oculto ' ,
        ' name ' :  ' csrf_token ' ,
          ' valor ' :  ' <? php echo csrf_token (); ?> '  // hmmmm ...
        });

      var hiddenInput =
      $ ( ' <input> ' , {
        ' name ' :  ' _method ' ,
        ' type ' :  ' oculto ' ,
        ' valor ' :  enlace . datos ( ' método ' )
      });

      volver  forma . agregar (token, hiddenInput)
                 . appendTo ( ' cuerpo ' );
    }
  };

  Laravel . initialize ();

}) ();