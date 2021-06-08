    function pesquisaCep(){

        var cep    = document.getElementById("cep").value;
        var cidade = document.getElementById("cidade");
        axios
            .get(`https://brasilapi.com.br/api/cep/v1/${cep}`)
            .then(response => {
                showResults(response);
                //successo
                console.log(response.data.cep);
            })
                .catch(function(error) {
                //erro
                console.log(error);
            });
       
            function showResults (resultado) {
                document.getElementById('results').innerHTML =
             `Esse cep fica em ${resultado.data.state}, na cidade de ${resultado.data.city}, ${resultado.data.street}! E é atendido pela Appdido!`;
                cidade.value = `${resultado.data.city}`;
    }
}

       
    
 