</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#example').dataTable( {
            "order": [[ 3, "desc" ]]
        } );
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>
</body>
</html>