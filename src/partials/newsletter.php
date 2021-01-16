<div style="width: 240px; margin: 0 auto 5px auto; padding: 3px;">
    <form method="post" action="http://app.enviosmasivos.mx/form.php?form=1" id="frmSS1" onsubmit="return CheckForm1(this);">
    <p style="text-align: left; font-size: 1.1em; padding: 4px">
    Noticias, eventos y oferta de hoteles en tu correo electrónico: </p>
    <p>
    <label>* E-mail : </label><br />
    <input type="text" name="email" value="" class="form-control" placeholder="email@dominio.com" />
    </p>
    <input type="hidden" name="format" value="h">
    <p>
        <input type="submit" value="Registrarme" class="btn btn-success btn-lg"  />
    </p>

    </form>
</div>

<script type="text/javascript">
// <![CDATA[

function CheckMultiple1(frm, name) {
    for (var i=0; i < frm.length; i++)
    {
        fldObj = frm.elements[i];
        fldId = fldObj.id;
        if (fldId) {
            var fieldnamecheck=fldObj.id.indexOf(name);
            if (fieldnamecheck != -1) {
                if (fldObj.checked) {
                        return true;
                }
            }
        }
    }
    
    return false;
}
    
function CheckForm1(f) 
{
    var email_re = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
    if (!email_re.test(f.email.value)) {
        alert("Please enter your email address.");
        f.email.focus();
        return false;
    }

    return true;
}
		
// ]]>
</script>