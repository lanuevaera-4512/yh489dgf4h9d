protected void btnEnviar_Click(object sender, EventArgs e)
{
    string strNombre = &quot;&quot;, strApellido = &quot;&quot;, strUsuario = &quot;&quot;;
    strNombre = txtNombre.Text;
    strApellido = txtApellido.Text;
    strUsuario = txtUsuario.Text;
    string laURL = &quot;PaginaDestino.aspx?&quot;;
    if (HttpContext.Current != null)
    {
        string elDato = laURL +
          EncryptQueryString(string.Format(&quot;Nombre={0}&amp;Apellido={1}&amp;Usuario={2}&quot;,
          strNombre, strApellido, strUsuario));
        HttpContext.Current.Response.Redirect(elDato);
    }
}
 
public string EncryptQueryString(string strQueryString)
{
    Encryption objetoCifrar = new Encryption();
    return objetoCifrar.Encrypt(strQueryString, &quot;j0h44y&quot;);
}
