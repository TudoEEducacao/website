function ObjectFactory(objectName){
	var outputObject = new PainelLogin();
	if (objectName.toUpperCase() == outputObject.getName()){
		return outputObject;
	} else {
		return;
	}
}