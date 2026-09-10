<function name="RegisterDocument" parent="SlashCo" type="libraryfunc">
	<description>
		Registers a document table, keyed by its `Name`, and groups it under its `Type`.<br>
		If `Type` is `"Slasher"` and no <page>Document#Slasher</page> field is set, it defaults to the document's `Name`.<br>
		Must be called before document loading finishes; calling it afterwards throws an error.
	</description>
	<realm>Shared</realm>
	<group>Documents</group>
	<args>
		<arg name="table" type="Document">The <page>Document</page> table to register.</arg>
	</args>
</function>
