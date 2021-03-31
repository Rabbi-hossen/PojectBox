package Week4.Exercise;

public class BoX {
    public  static  double totalPrice =0.0d;
    public double length;
    public double width;
    public double height;
    public  static  double PricePerUnit=5.0d;
    public void setLength(double length){
        this.length=length;
    }
    public  double getlength(){
        return length;
    }
    public void setWidth(double width){
        this.width=width;
    }
    public  double getWidth(){
        return width;
    }
    public void setHeight(double height){
        this.height=height;
    }
    public  double getHeight(){
        return height;
    }
    public  double getPricePerBox(){
        double price= PricePerUnit*(length+width+height);

         totalPrice=totalPrice +price;
        System.out.println("total price :"+totalPrice);
        return price;



    }
}
