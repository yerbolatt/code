/*Ойын. Үш қорап сіріңке бар. Әр қораптағы сіріңкелер саны кем дегенде 2-ден көп. 
Екі ойыншы кезекпен жүріс жасайды. Әрбір жүрісте ойыншы үш қораптың біреуінен кем дегенде 1 немесе одан көп сіріңке алады. 
Ойында соңғы сіріңкені алған ойынша жеңімпаз болады. Осы ойынның бағдарламасын құрыңыз.*/

public static void main(String[] args) {
Scanner S =new Scanner(System.in);
int i=0,choose,sp;
int[] a=new int[4];
a[1]=(int) (5 + Math.random() * 10);
a[2]=(int) (5 + Math.random() * 10);
a[3]=(int) (5 + Math.random() * 10);
while ((a[1]>0)||(a[2]>0)||(a[3]>0)){
for (i=1;i<=2;i++){
System.out.println("1 korobka= "+a[1]+" 2 korobka= "+a[2]+" 3 korobka= "+a[3]);
System.out.print("Hod "+i+"-igroka, viberite korobku =");
choose=S.nextInt();
System.out.print("Viberite kolichestvo spichek =");
sp=S.nextInt();
a[choose]-=sp;
if ((a[1]<=0)&&(a[2]<=0)&&(a[3]<=0)) break;
}
}
System.out.println("Pobedil igrok "+i+". Pozdravlyayu!!!");
