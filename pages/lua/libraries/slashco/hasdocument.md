<function name="HasDocument" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether the local player has collected the given document.
	</description>
	<realm>Client</realm>
	<group>Documents</group>
	<args>
		<arg name="name" type="string">Name of the document to check.</arg>
	</args>
	<rets>
		<ret name="hasDocument" type="boolean">`true` if the local player has the document.</ret>
	</rets>
</function>
