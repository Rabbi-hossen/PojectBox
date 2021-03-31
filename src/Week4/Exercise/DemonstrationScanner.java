package Week4.Exercise;
import java.util.Scanner;
public class DemonstrationScanner {
    public  void readInteger(){
        Scanner sc =new Scanner(System.in);

        System.out.println("Enter num1 :");
        int st = sc.nextInt();
        System.out.println("Enter num32 :");
        int st2= sc.nextInt();
        System.out.println("sum :"+(st+st2));
        System.out.println("Product :"+(st*st2));
    }
    public void  AboutYoutSelf(){
        Scanner c=new Scanner(System.in);
        System.out.println("Enter name :");
        String s=c.nextLine();
        System.out.println("enter filed of interest :");
        String s1=c.nextLine();
        System.out.println("Enter your age :");
        int i=c.nextInt();
        System.out.println("enter height :");
        double d=c.nextDouble();
        System.out.println("Hey, My name is "+s+" i am "+i+" years of old. i am "+d+" feet long. My field of interest are "+s1);

    }
    public void readDemonstration(double l,double b){
        int area=(int)(l*b);
        System.out.println("area :"+area);
    }


    public static void main(String[] args) {
        DemonstrationScanner d= new DemonstrationScanner();
        //d.readInteger();
        //d.AboutYoutSelf();
        d.readDemonstration(5.4d,4.6d);
    }

}
