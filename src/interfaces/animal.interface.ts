export interface AnimalInterfaz{
	 nombre:string;
	 imagen:string;
	 audio:string;
	 duracion:number;  
	 reproduciendo:boolean; 
	 //duracion?:string;  //aqui usamos ? para especificar que este campo es opcional, y que no de error cuando lo especifiquemos
}