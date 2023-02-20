class Sivitas extends Human
{
    private String asalUniv;
    private String emailEdu;

    Sivitas()
    {
        this.asalUniv = "";
        this.emailEdu = "";
    }

    Sivitas(String a, String b, String c, String d, String e)
    {
        setNik(a);
        setNama(b);
        setJk(c);
        this.asalUniv = d;
        this.emailEdu = e;
    }

    void setAsalUniv(String a)
    {
        this.asalUniv = a;
    }
    void setEmailEdu(String a)
    {
        this.emailEdu = a;
    }

    String getAsalUniv()
    {
        return this.asalUniv;
    }
    String getEmailEdu()
    {
        return this.emailEdu;
    }
};
