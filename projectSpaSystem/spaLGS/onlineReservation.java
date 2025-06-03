// onlineReservation is a subclass of Reservation and Reservation is superclass
public class onlineReservation extends Reservation
{
    private double rewardPoint;
    
    public onlineReservation(Customer cust, String p, String rt, double rp)
    {
        super(cust, p , rt);
        rewardPoint = rp;
    }

    public void setRewardPoint(double rewardPoint)
    {
        this.rewardPoint = rewardPoint;
    }
    
    public double getRewardPoint()
    {
        return rewardPoint;
    }
    
    public double calcReward()
    {
        if(super.calcTotal() >= 50 && super.calcTotal() <= 100)
            rewardPoint = 200;
            
        if(super.calcTotal() > 100)
            rewardPoint = 350.00;
            
        return rewardPoint;
    }
    
    // LGS - Luxe Glow Spa
    public String toString()
    {
        if(rewardPoint >= 100)
            return " Reward Points    : " +rewardPoint+ "\nPoints Voucher   : LGS24 " + "\nGift Voucher     : - ";
        else
            return " Reward Points    : " +rewardPoint+ "\nPoints Voucher   : - " + "\nGift Voucher     : - ";
    }
}
