
class car {

    Integer id ;
    String license;
    Account driver;
    private Integer passenger;

    public car(String license,Account driver){
        this.license = license;
        this.driver = driver;
        
    }
    
    void printDatacar(){
        if (passenger != null ){
            System.out.println("license: "+ license + " Name Driver: " + driver.name + " Passanger: " + passenger);
        }
        
    }
    public Integer getPassenger(){
        return passenger;
    }
    public void setPassenger(Integer passenger){
        if (passenger==4){
            this.passenger= passenger;
        }else{
            System.out.println("Necesitas asignar 4 pasajeros");
        }

    }

   

    

}