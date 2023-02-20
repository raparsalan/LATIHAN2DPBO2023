class Mahasiswa extends Sivitas
{
    private String nim;
    private String prodi;
    private String fakultas;

    Mahasiswa()
    {
        this.nim = "";
        this.prodi = "";
        this.fakultas = "";
    }
    
    Mahasiswa(String a, String b, String c, String d, String e, String f, String g, String h)
    {
        setNik(a);
        setNama(b);
        setJk(c);
        setAsalUniv(d);
        setEmailEdu(e);
        this.nim = f;
        this.prodi = g;
        this.fakultas = h;
    }

    void setNim(String a)
    {
        this.nim = a;
    }
    void setProdi(String a)
    {
        this.prodi = a;
    }
    void setFakultas(String a)
    {
        this.fakultas = a;
    }
    void showData()
    {
        System.out.println("NIK              : " + this.getNik());
        System.out.println("Nama             : "+ this.getNama());
        System.out.println("Jenis Kelamin    : "+ this.getJk());
        System.out.println("Asal Universitas : "+ this.getAsalUniv());
        System.out.println("Email            : "+ this.getEmailEdu());
        System.out.println("NIM              : "+ this.getNim());
        System.out.println("Fakultas         : "+ this.getFakultas());
        System.out.println("Program Studi    : "+ this.getProdi());
    }
    String getNim()
    {
        return this.nim;
    }
    String getProdi()
    {
        return this.prodi;
    }
    String getFakultas()
    {
        return this.fakultas;
    }
    
};
