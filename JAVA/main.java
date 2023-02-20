import java.util.Scanner;
import java.util.ArrayList;

class main{
    public static void main(String[] args){
        ArrayList<Mahasiswa> listMhs = new ArrayList<>();
        String newline = System.lineSeparator();
        Scanner scan = new Scanner(System.in);
        Mahasiswa bintang = new Mahasiswa("3202366654", "Bintang", "L", "UPI", "bintangfajar77@upi.edu", "2108852", "Ilkom", "FPMIPA");
        listMhs.add(bintang);
        Mahasiswa rayhan = new Mahasiswa();
        rayhan.setNik("3202351254");
        rayhan.setNama("Rayhan");
        rayhan.setJk("L");
        rayhan.setAsalUniv("UPN Veteran");
        rayhan.setEmailEdu("rayhanimoetzz89@upn.edu");
        rayhan.setNim("2103366");
        rayhan.setProdi("Sastra Inggris");
        rayhan.setFakultas("FPBS");
        listMhs.add(rayhan);
        int i;
        for(i=0; i < listMhs.size(); i++)
        {
            System.out.println("================================================");
            listMhs.get(i).showData();
        }
        System.out.println("================================================");

        
    }
}