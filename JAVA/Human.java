class Human
{
    private String nik;
    private String nama;
    private String jk;

    Human()
    {
        this.nik = "";
        this.nama = "";
        this.jk = "";
    };
    Human(String a, String b, String c)
    {
        this.nik = a;
        this.nama = b;
        this.jk = c;
    }

    void setNik(String a)
    {
        this.nik = a;
    }
    void setNama(String a)
    {
        this.nama = a;
    }
    void setJk(String a)
    {
        this.jk = a;
    }

    String getNik()
    {
        return this.nik;
    }
    String getNama()
    {
        return this.nama;
    }
    String getJk()
    {
        return this.jk;
    }
};
