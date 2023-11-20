    var num = 10;
    let name = "NOX";
    age = 20;
    const year = 2003;

    console.log(year);

    fruit =["grape","apple","lemon"]

    console.log(fruit);

    plant ={fruit:"grape", car: "Honda", color: "RED" }

    console.log(plant);

    datajson ={
        employee:[{name: "STEVE" }, {age: 20 },{year: 2003 } ]

    };

        console.log(datajson.employee[0].name);

        let msg = name + " " + year;

        console.log(msg);

        document.getElementById('title').innerHTML=msg;

        $(function(){
            $('#title')
            .html(msg + 'jQuery')
        });

</script>