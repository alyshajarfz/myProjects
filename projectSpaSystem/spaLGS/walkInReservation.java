public class walkInReservation extends Reservation
{
    private String giftVoucher;
    
    public walkInReservation(Customer cust, String p, String rt, String gv)
    {
        super(cust, p , rt);
        giftVoucher = gv;
    }

    public void setGiftVoucher(String giftVoucher)
    {
        this.giftVoucher = giftVoucher;
    }
    
    public String getGiftVoucher()
    {
        return giftVoucher;
    }
    
    public String formatGiftVoucher()
    {
        if (super.getPackages().equalsIgnoreCase("A"))
            giftVoucher = "GVLGS10";
        else if (super.getPackages().equalsIgnoreCase("B"))
            giftVoucher = "GVLGS20";
        else if (super.getPackages().equalsIgnoreCase("C"))
            giftVoucher = "GVLGS30";
        else
            giftVoucher = "GVLGS50";
        
        return giftVoucher;
    }
    
    // LGS - Luxe Glow Spa
    public String toString()
    {
        if(getReserveType().equalsIgnoreCase("WalkIn"))
            return " Reward Points    : - " + "\nPoints Voucher   : - " + "\nGift Voucher     : " +giftVoucher;
        else
            return " Reward Points    : - " + "\nPoints Voucher   : - " + "\nGift Voucher     : " +giftVoucher;
    }
}
