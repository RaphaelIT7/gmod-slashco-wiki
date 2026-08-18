<function name="ParseKeyboardBinds" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		<warning>
			This function currently discards any unknown bindings!<br>
			This will be changed in the next update.
		</warning>
		Parses the given string into a table with all key bindings
	</description>
	<realm>Shared</realm>
	<group>Keyboard</group>
	<args>
		<arg name="bindData" type="string">The bind data</arg>
	</args>
	<rets>
		<ret name="binds" type="table">A table containing all valid binds</ret>
	</rets>
</function>