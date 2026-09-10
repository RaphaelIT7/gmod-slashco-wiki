<function name="GiveDocument" parent="Player" type="classfunc">
	<description>
		Gives the player a document with the given rating and persists it to the database.<br>
		If the player already has the document, its rating is only updated when the new rating is higher than the stored one. Networks the (updated) document to the player afterwards.
	</description>
	<realm>Server</realm>
	<group>Documents</group>
	<args>
		<arg name="name" type="string">Name of the document to give.</arg>
		<arg name="rating" type="number">Rating to give the document, from 0 to 3.</arg>
	</args>
</function>
