
$(() => {
    setInterval(() => {
       
        $.ajax({
            method: "GET",
            url: "/latest/get-latest"
        }).then((data) => {
           $("#noTitlte").text(data.title);
            console.log(data);
        })
    }, 2000);
  
})
