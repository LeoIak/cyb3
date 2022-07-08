<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск по людям</title>

    <script>
        function search() {
            //alert(document.getElementById("letters").value);
            var letters = document.getElementById("letters").value;
            var url = "api/people.php?letters=" + letters;
            //alert(url);
            var xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.onload = function() {
                var result = xhr.responseText;
                //alert(result);
                //Десериализация (из текста в объект)
                var people = JSON.parse(result);
                //alert(people);
                var out = "";
                for(var i=0; i < people.length; i++) {
                    var person = people[i];
                    //alert(person["LastName"]);
                    var firstName = person["FirstName"];
                    var lastName = person["LastName"];
                    var city = person["City"];
                    var text = lastName + ", " + firstName + " from " + city + "<br />";
                    //alert(text);
                    out = out + text;
                }
                //alert(out);
                document.getElementById("display").innerHTML = out;
            };
            xhr.send();
        }
    </script>

</head>

<body>
    <a href ="index1.html">Домашняя страница</a>
    <h1>Поиск по людям</h1>
    Введите первые буквы фамилии человека: 
    <input type="text" id="letters" oninput="search();"/>
    <div id="display"></div>
    
</body>
</html>