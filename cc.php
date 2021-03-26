
}

<html>

<head>
    <script type="text/javascript">
window.onload = function () {
    var div = document.getElementById("dvScroll");
   var div_position = document.getElementById("div_position");
    var position = parseInt('<%=Request.Form("div_position") %>');
    if (isNaN(position)) {
        position = 0;
    }
    div.scrollTop = position;
    div.onscroll = function () {
        div_position.value = div.scrollTop;
    };
};
</script>
</head>

<body>

<div id="dvScroll" style="overflow-y: scroll; height: 260px; width: 300px">

    1. This is a sample text

    <br />

    2. This is a sample text

    <br />

    3. This is a sample text

    <br />

    4. This is a sample text

    <br />

    5. This is a sample text

    <br />

    6. This is a sample text

    <br />

    7. This is a sample text

    <br />

    8. This is a sample text

    <br />

    9. This is a sample text

    <br />

    10. This is a sample text

    <br />

    11. This is a sample text

    <br />

    12. This is a sample text

    <br />

    13. This is a sample text

    <br />

    14. This is a sample text

    <br />

    15. This is a sample text

    <br />

    16. This is a sample text

    <br />

    17. This is a sample text

    <br />

    18. This is a sample text

    <br />

    19. This is a sample text

    <br />

    20. This is a sample text

    <br />

    21. This is a sample text

    <br />

    22. This is a sample text

    <br />

    23. This is a sample text

    <br />

    24. This is a sample text

    <br />

    25. This is a sample text

    <br />

</div>

<hr />
<form method="post">
<input type="hidden" id="div_position" name="div_position" />
<input type="submit" value="Cool" />
    </form> 
</body>
</html>
