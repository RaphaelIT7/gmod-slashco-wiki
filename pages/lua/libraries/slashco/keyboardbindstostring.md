<function name="KeyboardBindsToString" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		<warning>
			This function currently discards any unknown bindings!<br>
			This will be changed in the next update.
		</warning>
		Builds a string with all **valid** bindings to store it somewhere
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="binds" type="table">A table with all binds</arg>
	</args>
	<rets>
		<ret name="bindData" type="string">A string that holds the bind data</ret>
	</rets>
</function>