package testing;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;

public class login {
 
	public static void main(String[] args) {
		System.setProperty("webdriver.chrome.driver", "C:\\chromedriver-win64\\chromedriver.exe");
		   WebDriver driver = new ChromeDriver();
		   try {
			   driver.get("http://localhost/project/login.php");
			   driver.manage().window().maximize();

			   WebElement useremailField = driver.findElement(By.id("email"));
			   useremailField.sendKeys("ahamed1@gmail.com");
			   Thread.sleep(1000);
			   WebElement userpassField =driver.findElement(By.id("password"));
			   userpassField.sendKeys("nafly@12345");
			   Thread.sleep(1000);
			   driver.findElement(By.id("btn")).click();
			   
			   Thread.sleep(1000);
			  //ordering
			   WebElement quantityField = driver.findElement(By.name("product_quantity"));
			   quantityField.clear();
			   quantityField.sendKeys("3");
			   Thread.sleep(1000);
			   driver.findElement(By.name("add_to_cart")).click();
			   Thread.sleep(1000);
			   //card and checkOut
			   WebElement NavCard = driver.findElement(By.id("cart"));
			   NavCard.click();
			   Thread.sleep(1000);
			   driver.findElement(By.id("Checkout")).click();
			   Thread.sleep(1000);
			  //Place Your Order
			   
			   driver.findElement(By.name("name")).sendKeys("ahamed");Thread.sleep(1000);
	            driver.findElement(By.name("number")).sendKeys("0771234567");Thread.sleep(1000);
	            driver.findElement(By.name("email")).sendKeys("ahamed@gmail.com");Thread.sleep(1000);

	            Select ratingDropdown = new Select(driver.findElement(By.name("method")));
	            ratingDropdown.selectByValue("cash on delivery");Thread.sleep(1000);
	            
	            
	            driver.findElement(By.name("flat")).sendKeys("123");Thread.sleep(1000);
	            driver.findElement(By.name("street")).sendKeys("Main Street");Thread.sleep(1000);
	            driver.findElement(By.name("distric")).sendKeys("Eastern");Thread.sleep(1000);
	            driver.findElement(By.name("city")).sendKeys("Ampara");Thread.sleep(1000);
	            driver.findElement(By.name("country")).sendKeys("Sri Lanka");Thread.sleep(1000);
	            driver.findElement(By.name("pin_code")).sendKeys("123456");Thread.sleep(1000);

			   //btn	           
	            driver.findElement(By.name("order_btn")).click();
	            
			   Thread.sleep(3000);
		   }
		   catch (Exception e) {
	            e.printStackTrace();
	        } 
	}

}
