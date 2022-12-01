
    // alert("Hello js!");
    var num = 10;
    let name = "One";
    const arr = [10, 20, "O"];
    let obj = { name: "One", age: 30 };
    const objmix = { data: [{ name: "Two", gpa: 3.51 }, { name: "One", age: 12, gpa: 3.12 }] };

    console.log(num);
    console.log(arr[2]);
    console.log(objmix.data[1].age);

    function add(a, b) {
        return a + b;
    };

    let total = add(3, 5);

    document.getElementById("div1").innerHTML = name;
    $(function () {
        // alert("Hello jQuery...");
        $("#btn1").click(function () {
            $("#div1").text("BRU");
        });

        $("#btn2").bind("Click",()=>{
            $(".in1").val("BRU");
        });


        $("#btn3").click(()=>{
            $("#.in1.even").toggleClass("red");
        });
        
        $("#div_form").load("./pagas/form.html");

    });



