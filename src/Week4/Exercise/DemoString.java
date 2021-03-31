package Week4.Exercise;

import java.util.Locale;

public class DemoString {
    public void StringDemoMethod(){
        String s1="Hello";
        String s2="              hello              ";
        System.out.println("character at index 0 is :"+s1.indexOf(0));
        System.out.println(("cod point of idex 4 is :"+s1.charAt(4)));
        System.out.println("reult of two string comparison :"+s1.compareTo(s2)+"\n"+ " anoter "+s2.compareTo(s1) );
        System.out.println("upper case value of s1 :"+s1.toUpperCase());
        System.out.println("indext of e in s1 :"+s1.indexOf('e'));
        System.out.println("length of s1 :"+s1.length()+" lenthe of s2 : "+s2.length());
        System.out.println("s1 equals to s2 :"+s1.equals(s2));
        System.out.println("cognet of s1 & s2 :"+s1.concat(s2));
        System.out.println("trime :"+s2.trim());

    }

    public static void main(String[] args) {
 DemoString D=new DemoString();
 D.StringDemoMethod();


    }
}
