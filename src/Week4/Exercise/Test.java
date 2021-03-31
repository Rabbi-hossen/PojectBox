package Week4.Exercise;

public class Test {

    public static void main(String[] args) {
     BoX B=new BoX();
     B.setLength(2.0d);
     B.setWidth(2.0d);
     B.setHeight(2.0d);
        System.out.println("length ="+B.getlength());
        System.out.println("width ="+B.getWidth());
        System.out.println("height ="+B.getHeight());
        System.out.println("price of the box :"+B.getPricePerBox());

        BoX c=new BoX();
        c.setLength(3.0d);
        c.setWidth(3.0d);
       c.setHeight(3.0d);
        System.out.println("length ="+c.getlength());
        System.out.println("width ="+c.getWidth());
        System.out.println("height ="+c.getHeight());
        System.out.println("price of the box :"+c.getPricePerBox());


       // B.getPricePerBox();


    }
}
