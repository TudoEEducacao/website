function ObjectFactory(objectName){
	var outputObject = new PainelLogin();
	if (objectName.toUpperCase() == outputObject.getName()){
		return outputObject;
	}

            outputObject = new BarraLateral();
          if (objectName.toUpperCase() == outputObject.getName()){
                        return outputObject;
           }
            outputObject = new Editor();
          if (objectName.toUpperCase() == outputObject.getName()){
                        return outputObject;
           }

    	return [];

}