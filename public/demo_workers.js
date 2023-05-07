
function chek(){
    setInterval(() => {
        fetch('/latest/get-latest')
        
           
            .then(response => {response.json() ;postMessage('test') }
          
            ) .then(json => console.log(JSON.stringify(json)));


        // $.ajax({
        //     method: "GET",
        //     url: "/notice/get-latest"
        // }).then((data) => {
           
        //     postMessage(data);
        // })
    }, 2000);
}

chek();
