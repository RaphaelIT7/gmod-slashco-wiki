<function name="GetDocumentTable" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a registered document by its name.
	</description>
	<realm>Shared</realm>
	<group>Documents</group>
	<args>
		<arg name="name" type="string">Name of the document to retrieve.</arg>
	</args>
	<rets>
		<ret name="documentTbl" type="Document" optional>The registered <page>Document</page> table, or `nil` if it doesn't exist.</ret>
	</rets>
</function>
