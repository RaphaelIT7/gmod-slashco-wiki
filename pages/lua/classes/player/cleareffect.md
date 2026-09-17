<function name="ClearEffect" parent="Player" type="classfunc">
	<description>
		Immediately removes a specific active effect from the player (all stacked instances of it), calling its <page>EFFECT#OnRemoved</page> (or <page>EFFECT#OnExpired</page>) callback and cancelling its expiry timer(s).
	</description>
	<realm>Shared</realm>
	<group>Effects</group>
	<args>
		<arg name="effectName" type="string">Name of the effect to remove.</arg>
	</args>
</function>
