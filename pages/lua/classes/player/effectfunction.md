<function name="EffectFunction" parent="Player" type="classfunc">
	<description>
		Calls the given callback function (e.g. <page>EFFECT#OnApplied</page>, <page>EFFECT#OnExpired</page>, <page>EFFECT#OnRemoved</page>) of one of the player's active effects, forwarding any extra arguments.<br>
		Does nothing if the player doesn't have that effect active, or the effect doesn't define the callback.
	</description>
	<realm>Shared</realm>
	<group>Effects</group>
	<args>
		<arg name="effectName" type="string">Name of the active effect.</arg>
		<arg name="funcName" type="string">Name of the callback function to call on the effect table.</arg>
		<arg name="..." type="any" optional>Additional arguments passed to the callback.</arg>
	</args>
	<rets>
		<ret name="..." type="any" optional>The return values of the called callback.</ret>
	</rets>
</function>
