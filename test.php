<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="frm" method="POST" action="connec.php">
        <label>
            HostName:
        </label>
        <input id="txt" name="text" type="text" />
        <input id="hide" type="hidden" value="1"/>

        <input id="Vie" type="button" value="View"/>


    </form>


    <input id="sub" type="button" value="Save&Run"/>
    <?php
    echo '<div>' . htmlspecialchars($data) . '</div>' . "\n";
    ?>

    <script>
        const vieButton = document.getElementById('Vie');
        const subButton = document.getElementById('sub');
        vieButton.addEventListener('click', (e) => {
            const divView = document.getElementsByTagName('div')[0];
            const divText = document.getElementById('txt');
            
            divView.textContent = divText.value;
        })

        sub.addEventListener('click', ()=>{
            const frm = document.getElementById('frm');
            frm.submit();
        })
    </script>

</body>

</html>