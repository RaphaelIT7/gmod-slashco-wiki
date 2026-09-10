<function name="SlasherHudFunc" parent="Player" type="classfunc">
	<description>
		Calls a function named `funcName` on the player's slasher HUD panel, on their client.<br>
		Internally networks the call to the owning client via <page>SendValue</page>, which doesn't support keyed tables or materials as arguments.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="funcName" type="string">Name of the function to call on the client's slasher HUD panel</arg>
		<arg name="..." type="any" optional>Additional arguments to pass to the function</arg>
	</args>
</function>
