<script>

    {literal}
        $(function() {
            $("#idDepartement").blur(function(){
                $.getJSON('?module=Inscription&action=ajax', {idDepartement:$(this).val()}, function(data) {

                        var options = "";
                        if(data != null) {
                                for(var i in data) {

                                        options += '<option value="' + data[i] + '">' + data[i] + '</option>';
                                }
                        }

                        if(options != "") {
                                $("#idGroupeUtilisateur").html(options);
                                $("#idGroupeUtilisateur").attr("disabled", false);
                        }
                        $(function(){
                            $('#ajax').autocomplete({source: "?module=Ajax&action=ajax"})}
                        )
                });
        });
    });
{/literal}
</script>

<p>
Tous les champs marqués d'une * sont obligatoires.
</p>
{$form}
<div style='clear:both'></div>