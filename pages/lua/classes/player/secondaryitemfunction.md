<function name="SecondaryItemFunction" parent="Player" type="classfunc">
	<description>
		Calls the given callback function of the player's secondary item, checking their active effects first via <page>ItemFunctionInternal</page>.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="funcName" type="string">Name of the callback function to call.</arg>
		<arg name="..." type="any" optional>Additional arguments passed to the callback.</arg>
	</args>
	<rets>
		<ret name="..." type="any" optional>The return values of the called callback.</ret>
	</rets>
</function>
