<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
    <script>
        function getPeople() {
            var letters = document.getElementById("letters").value;
            //alert(letters);
            var url = "api/people.php?letters="+letters;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.onload = function() {
                var text = xhr.responseText;
                //alert(text);
                
                //десериализация JSON
                var people = JSON.parse(text);
                //alert(people);
                var out = "";
                for(var i=0; i < people.length; i++) {
                    var person = people[i];
                    //alert(person);
                    var firstName = person["first_name"];
                    var lastName = person["last_name"];
                    //alert(lastName);
                    out += lastName + ", " + firstName + "<br />";
                    //alert(out);
                    
                }
                document.getElementById("display").innerHTML = out;
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <button style="width: 200px; text-align: center;"><a href="index1.html
    " style="text-decoration:none;">ДОМ</a></button><br />
    <input type="text" id="letters" oninput="getPeople();" placeholder="Введите фамилию"/>
    <div id="display">

    </div>
</body>
</html>