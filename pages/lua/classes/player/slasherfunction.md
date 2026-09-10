<function name="SlasherFunction" parent="Player" type="classfunc">
	<description>
		Calls a function stored on the player's current <page>SlasherClass</page> table, passing the player itself as the first argument.<br>
		Assumes the player is on the slasher team; no team check is performed.<br>
		Does nothing and returns nothing if the slasher table doesn't have a function under that name.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="value" type="string">Name of the function field to call on the slasher table</arg>
		<arg name="..." type="any" optional>Additional arguments to pass to the function</arg>
	</args>
	<rets>
		<ret name="..." type="any" optional>The return values of the called function</ret>
	</rets>
</function>
