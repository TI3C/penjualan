var url= "http://localhost:8080/eroz/";

    	function load_popup(id){

    		$.ajax({
    			'url' 	:url+'welcome/'+'tampil_detail',
    			'type'	:'POST',
    			'data'	:{ 'id' : id },

    			'success' : function(data){
    				var container = $('#myModal');
    					if(data){
    						container.html(data);
    						$('#myModal').modal('show');
    					}
    			}
    		});
    	}

        function load_testimoni(id){

            $.ajax({
                'url'   :url+'welcome/'+'tampil_testimoni',
                'type'  :'POST',
                'data'  :{ 'id' : id },

                'success' : function(data){
                    var container = $('#myModal');
                        if(data){
                            container.html(data);
                            $('#myModal').modal('show');
                        }
                }
            });
        }

        function load_beli(id){
             $.ajax({
                'url'   :url+'admin/'+'detail_pembelian',
                'type'  :'POST',
                'data'  :{ 'id' : id },

                'success' : function(data){
                    var container = $('#myModal');
                        if(data){
                            container.html(data);
                            $('#myModal').modal('show');
                        }
                }
            });
        }

        function load_user(id){

            $.ajax({
                'url'   :url+'user/'+'tampil_detail',
                'type'  :'POST',
                'data'  :{ 'id' : id },

                'success' : function(data){
                    var container = $('#myModal');
                        if(data){
                            container.html(data);
                            $('#myModal').modal('show');
                        }
                }
            });

        }


        function load_cari(id){

            $.ajax({
                'url'   :url+'welcome/'+'tampil_cari',
                'type'  :'POST',
                'data'  :{ 'id' : id },

                'success' : function(data){
                    var container = $('#myModal');
                        if(data){
                            container.html(data);
                            $('#myModal').modal('show');
                        }
                }
            });
        }
    	

    	function load_login(){

    		$.ajax({
    			'url' 	:url+'welcome/'+'tampil_login',
    			'type'	:'POST',
    			

    			'success' : function(data){
    				var container = $('#myModal');
    					if(data){
    						container.html(data);
    						$('#myModal').modal('show');
    					}
    			}
    		});
    	}