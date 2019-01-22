Menambah Data Employee
<br />
<br />
<form method="POST" 
action="/Employee">
{{ csrf_field() }}
ID
<input type="text" name="txt_id"/>
<br />
Name
<input type="text" name="txt_name" />
<br />
Address
<input type="text" name="txt_address" />
<br />
Phone number
<input type="text" name="txt_phone" />

<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />

</form>