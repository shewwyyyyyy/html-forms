<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        * {
          padding: 0;
          margin: 0;  
        }

        body {
            background-color: #f8f7ff;
            height: 100%;
            padding-block: 5%;
            
        }

        main {
            margin: auto;
            height: 30rem;
            width: 60%; 
            background-color: #b8b8ff;
            border-radius: 1rem;
            padding-block: 2rem;
        }

        h1 {
            text-align: center; 
            color: #4a34c8; 
            padding-block: 2rem;
            font-size: 2.5rem;
        }

        .form-title {
            margin: auto;
        }
        
        input[type="radio"]{
            color: white;
        }

        .flex-field {
            display: grid;
            grid-template-columns: 25% 75%;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            padding-inline: 1.3rem;
            margin-bottom: 2rem;
            
        }

        .grid-input {
            flex-grow: 1;
            font-size: 12px;
            padding-block: 6px;
            padding-inline: 4px;
            box-sizing: border-box;
            border-color: beige;
            background-color: transparent;
            border-color: transparent transparent black transparent;
            

        }

        .grid-label {
            text-align: right;
            
        }

        .grid-select {
            font-size: 12px;
            padding-block: 6px 4px;
            line-height: 4px;    
        }

        .checkbox-form {
            padding-inline: 4rem;
            margin-bottom: 2.5rem;
        }
        
        .form-button {
            background-color: #f8f7ff;
            color: #9381ff;
            border: 0px;
            border-radius: 4px;
            padding: 1rem 2.4rem
        }
    </style>
</head>
<body>
    <main>
        <form action="submit.php" method="post">
            <input type="text" name="first" placeholder="fullname"   class="grid-input" >
            <input type="text" name="last" placeholder="last_name"   class="grid-input">
            <input type="email" name="email" placeholder="user email" class="grid-input">
            <input type="password" name="password" placeholder="user pass" class="grid-input">
            <input type="text" name="name" minlength="3" maxlength="10" placeholder="user pass" class="grid-input">
            <input type="hidden" name="usertype" value="admin" minlength="3" maxlength="10" placeholder="user pass" class="grid-input">
            <input type="date" name="date" min="<?php echo date('Y-m-d'); ?>"   >
           
   <!--
            <input type="checkbox" name="checkbox[]" class="" id="" value="Java" ><label for="checkbox">Java </label>
            <input type="checkbox" name="checkbox[]" id="" value="C++"><label for="checkbox"> C++ </label>
            <input type="checkbox" name="checkbox[]" id="" value="PHP"><label for="checkbox"> PHP++ </label>

      -->
            <input type="radio" name="year-level[]" id="" value="1" ><label for="year-level">Java </label>
            <input type="radio" name="year-level[]" id="" value="2"><label for="year-level"> C++ </label>
            <input type="radio" name="year-level[]" id="" value="3"><label for="year-level"> PHP++ </label>

            <input type="submit" value="click me">
            <input type="reset" value="this is reset">
            
           

        </form>
    </main>
</body>
</html> 