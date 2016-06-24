function ObjectFactory(objectName){
	var outputObject = new PainelLogin();
	if (objectName = outputObject.getName()){
		return outputObject;
	} else {
		return [];
	}
}