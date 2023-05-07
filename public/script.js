
$(() => {
   setInterval(() => {
       
        $.ajax({
            method: "GET",
            url: "/latest/get-latest"
        }).then((data) => {
            console.log(data);

           $("#noTitlte").text(data.title);
           $("#detail").text(data.detail);
           const d = new Date(data.date_published);
           $("#dateT").text(`${d.getDate()}/${d.getMonth()}/${d.getFullYear()}`);
          
        })
    }, 2000);
  
})
