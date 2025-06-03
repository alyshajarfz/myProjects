
public class Customer
{
    // attributes 
    private String name;
    private String phoneNum;
    private String member;

    // normal constructor
    public Customer(String n, String pnum, String mb)
    {
        name = n;
        phoneNum = pnum;
        member = mb;
    }

    // mutator method
    public void setCustomer(String name, String phoneNum, String member)
    {
        this.name = name;
        this.phoneNum = phoneNum;
        this.member = member;
    }
    
    // getter method 
    public String getName()
    {
        return name;
    }
    
    public String getPhoneNum()
    {
        return phoneNum;
    }
    
    public String getMember()
    {
        return member;
    }
    
    // printer method
    public String toString() {
        return String.format(
            "Name             : %-20s\n" +
            "Phone Number     : %-20s\n" +
            "Membership       : %-20s",
            name, phoneNum, member);
    }
}
