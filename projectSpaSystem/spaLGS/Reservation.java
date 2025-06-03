
public class Reservation
{
    protected Customer cust;
    protected String packages;
    protected String reserveType;
    
    public Reservation(Customer c, String p, String rt)
    {
        cust = c;
        packages = p;
        reserveType = rt;
    }
    
    public void setCustomer(String name, String phoneNum, String member)
    {
        this.cust.setCustomer(name, phoneNum, member);
    }
    
    public void setPackages(String p)
    {
        this.packages = p;
    }
    
    public void setReserveType(String rt)
    {
        this.reserveType = rt;
    }

    public Customer getCustomer()
    {
        return cust;
    }
    
    public String getPackages()
    {
        return packages;
    }
    
    public String getReserveType()
    {
        return reserveType;
    }
    
    public double calcPrice()
    {
        double price = 0.00;
        
        if(packages.equalsIgnoreCase("A"))
            price = 100.00;
        else if (packages.equalsIgnoreCase("B"))
            price = 150.00;
        else if (packages.equalsIgnoreCase("C"))
            price = 125.00;
        else if (packages.equalsIgnoreCase("D"))
            price = 100.00;
        else
        {
            System.out.println("Package does not exist");
            price = 0.00;
        }
        
        return price;
    }
    
    public double calcTotal() 
    {
        double price = calcPrice();
        String mem = cust.getMember().toLowerCase();
        
        if(mem.equals("member") || mem.equals("yes") || mem.equals("y")) {
            return price * 0.90;  // apply 10% discount
        } else {
            return price;
        }
    }
    
    // printer method
    public String toString() {
        return String.format(
            "%s\nPackage          : %-20s\nReservation Type : %-20s",
            cust.toString(), packages, reserveType
        );
    }
}
